<?php

namespace App\Support;

class MenuCatalog
{
    public static function all(): array
    {
        return [
            [
                'name' => 'Hambúrguer artesanal',
                'description' => 'Pão macio, carne grelhada, queijo e molho da casa.',
                'price' => 'R$ 32,90',
                'image' => 'photo-1568901346375-23c9450c58cd',
                'alt' => 'Hambúrguer artesanal com queijo',
            ],
            [
                'name' => 'Pizza da casa',
                'description' => 'Massa artesanal, queijo derretido e manjericão fresco.',
                'price' => 'R$ 45,00',
                'image' => 'photo-1574071318508-1cdbab80d002',
                'alt' => 'Pizza assada com queijo e manjericão',
            ],
            [
                'name' => 'Pasta ao molho pesto',
                'description' => 'Massa italiana com pesto fresco e parmesão.',
                'price' => 'R$ 29,90',
                'image' => 'photo-1473093295043-cdd812d0e601',
                'alt' => 'Prato de massa com molho e ervas',
            ],
            [
                'name' => 'Salada colorida',
                'description' => 'Folhas frescas, legumes da estação e molho cítrico.',
                'price' => 'R$ 24,90',
                'image' => 'photo-1512621776951-a57141f2eefd',
                'alt' => 'Salada fresca com legumes variados',
            ],
            [
                'name' => 'Salmão grelhado',
                'description' => 'Salmão grelhado servido com acompanhamentos frescos.',
                'price' => 'R$ 49,90',
                'image' => 'photo-1467003909585-2f8a72700288',
                'alt' => 'Salmão grelhado servido no prato',
            ],
            [
                'name' => 'Brownie com chocolate',
                'description' => 'Brownie artesanal, macio por dentro e com muito chocolate.',
                'price' => 'R$ 16,00',
                'image' => 'photo-1606313564200-e75d5e30476c',
                'alt' => 'Brownie de chocolate',
            ],
            [
                'name' => 'Frango crocante',
                'description' => 'Frango dourado e crocante, acompanhado de salada fresca.',
                'price' => 'R$ 34,90',
                'image' => 'photo-1532550907401-a500c9a57435',
                'alt' => 'Prato de frango preparado com acompanhamentos',
            ],
            [
                'name' => 'Lasanha à bolonhesa',
                'description' => 'Camadas de massa, molho bolonhesa e queijo gratinado.',
                'price' => 'R$ 38,00',
                'image' => 'photo-1574894709920-11b28e7367e3',
                'alt' => 'Lasanha assada com queijo gratinado',
            ],
            [
                'name' => 'Cheesecake de frutas',
                'description' => 'Cheesecake cremoso com cobertura de frutas vermelhas.',
                'price' => 'R$ 18,90',
                'image' => 'photo-1533134242443-d4fd215305ad',
                'alt' => 'Fatia de cheesecake com frutas',
            ],
            [
                'name' => 'Risoto de cogumelos',
                'description' => 'Arroz cremoso com cogumelos frescos e parmesão.',
                'price' => 'R$ 39,90',
                'image' => 'photo-1476124369491-e7addf5db371',
                'alt' => 'Risoto cremoso servido em um prato',
            ],
            [
                'name' => 'Tacos de carne',
                'description' => 'Tortilhas recheadas com carne temperada e vegetais.',
                'price' => 'R$ 27,90',
                'image' => 'photo-1551504734-5ee1c4a1479b',
                'alt' => 'Tacos recheados com carne e vegetais',
            ],
            [
                'name' => 'Panquecas com frutas',
                'description' => 'Panquecas fofinhas com frutas frescas e mel.',
                'price' => 'R$ 22,00',
                'image' => 'photo-1528207776546-365bb710ee93',
                'alt' => 'Panquecas servidas com frutas',
            ],
        ];
    }
}
