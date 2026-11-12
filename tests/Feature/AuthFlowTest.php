<?php

namespace Tests\Feature;

use App\Livewire\HomePage;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Livewire\Livewire;
use Tests\TestCase;

class AuthFlowTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_displays_the_brand_and_account_forms(): void
    {
        Livewire::test(HomePage::class)
            ->assertSee('meu')
            ->assertSee('cardápio')
            ->assertSee(route('menu'), false)
            ->assertSee('Acesse sua conta')
            ->assertSee('Cadastre-se');
    }

    public function test_public_menu_displays_food_photos_names_and_prices(): void
    {
        $this->get(route('menu'))
            ->assertOk()
            ->assertSee('images.unsplash.com')
            ->assertSee('Hambúrguer artesanal')
            ->assertSee('Pizza da casa')
            ->assertSee('R$ 32,90')
            ->assertSee('R$ 45,00');
    }

    public function test_guest_is_redirected_to_the_home_page_from_admin(): void
    {
        $this->get(route('admin'))
            ->assertRedirect(route('login'));

        $this->get(route('admin.payments'))
            ->assertRedirect(route('login'));

        $this->get(route('login'))
            ->assertRedirect(route('home'));
    }

    public function test_user_can_register_and_is_redirected_to_admin(): void
    {
        Livewire::test(HomePage::class)
            ->call('switchMode')
            ->set('name', 'Ana Cardoso')
            ->set('email', 'ana@example.com')
            ->set('password', 'segredo123')
            ->set('password_confirmation', 'segredo123')
            ->call('register')
            ->assertRedirect(route('admin'));

        $user = User::where('email', 'ana@example.com')->firstOrFail();

        $this->assertAuthenticatedAs($user);
        $this->assertTrue(Hash::check('segredo123', $user->password));
        $this->get(route('admin'))
            ->assertOk()
            ->assertSee('Seu cardápio está pronto para conferir')
            ->assertSee('Hambúrguer artesanal')
            ->assertSee('Lasanha à bolonhesa')
            ->assertSee('R$ 18,90')
            ->assertSee(route('admin.payments'), false);

        $this->get(route('admin.payments'))
            ->assertOk()
            ->assertSee('Opções de pagamento')
            ->assertSee('Pix')
            ->assertSee('Cartão')
            ->assertSee('Dinheiro')
            ->assertSee('Nenhum pagamento é processado');
    }

    public function test_existing_user_can_log_in_and_log_out(): void
    {
        $user = User::factory()->create([
            'email' => 'ana@example.com',
            'password' => 'segredo123',
        ]);

        Livewire::test(HomePage::class)
            ->set('email', 'ana@example.com')
            ->set('password', 'segredo123')
            ->call('authenticate')
            ->assertRedirect(route('admin'));

        $this->assertAuthenticatedAs($user);

        $this->post(route('logout'))
            ->assertRedirect(route('home'));

        $this->assertGuest();
    }
}
