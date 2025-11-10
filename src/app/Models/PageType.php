<?php

namespace App\Models;

use App\Helpers\Enum;
use ReflectionClass;

abstract class PageType extends Enum
{
    /*
     * examples:
     * #1: controller_moduleCategory.action
     * #2: controller.action
     *
     * action = view
    */

    const INDEX_SHOW = [
        'name' => 'index.show',
        'module' => false,
        'fields' => [
            'rotator' => ['rotator', 'Slider'],
            'subtitle_about_us'      => ['head', 'Podtytył - O nas'],
            'title_about_us'       => ['head', 'Tytuł - O nas'],   
            'description_about_us' => ['text', 'Opis - O nas'], 
            'subtitle_offer'       => ['head', 'Podtytuł - Oferta'],
            'title_offer'          => ['head', 'Tytuł - Oferta'],
            'offer_item_title'       => ['head', 'Tytuł - Usługa'],
            'offer_item_description' => ['text', 'Opis - Usługa'],
            'subtitle_why_us' => ['head', 'Podtytuł - Dlaczego my'],
            'title_why_us'    => ['head', 'Tytuł - Dlaczego my'],
            'title_counter_1'  => ['head', 'Nagłówek - Licznik 1'],
            'number_counter_1' => ['head', 'Liczba - Licznik 1'],
            'symbol_counter_1' => ['head', 'Symbol - Licznik 1'],

            'title_counter_2'  => ['head', 'Nagłówek - Licznik 2'],
            'number_counter_2' => ['head', 'Liczba - Licznik 2'],
            'symbol_counter_2' => ['head', 'Symbol - Licznik 2'],

            'title_counter_3'  => ['head', 'Nagłówek - Licznik 3'],
            'number_counter_3' => ['head', 'Liczba - Licznik 3'],
            'symbol_counter_3' => ['head', 'Symbol - Licznik 3'],
        ]
    ];
    const PAGE_SHOW = [
        'name' => 'page.show',
        'module' => false,
        'fields' => [
            'text1' => ['text', 'Text na stronie głównej']
        ]
    ];
    const GALLERY_SHOW = [
        'name' => 'gallery.show',
        'module' => false,
        'fields' => [
//            'text1' => ['text', 'Text na stronie głównej']
        ]
    ];
    const ABOUT_US_SHOW = [
        'name' => 'about-us.show',
        'module' => false,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const CONTACT_SHOW = [
        'name' => 'contact.show',
        'module' => false,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const ARTICLE_INDEX = [
        'name' => 'article.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', 'Text na stronie głównej']
        ]
    ];
    const ARTICLE_CATEGORY_INDEX = [
        'name' => 'article_category.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const OFFER_INDEX = [
        'name' => 'offer.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const OFFER_CATEGORY_INDEX = [
        'name' => 'offer_category.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const REALIZATION_INDEX = [
        'name' => 'realization.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const REALIZATION_CATEGORY_INDEX = [
        'name' => 'realization_category.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];


    static function getNames() : array {
        $class = new ReflectionClass(get_called_class());
        $types = array_values($class->getConstants());
        $names = [];
        foreach ($types as $type) {
            $names[] = $type['name'];
        }
        return $names;
    }

    static function getByName($name) : array {
        $class = new ReflectionClass(get_called_class());
        $types = array_values($class->getConstants());
        foreach ($types as $type) {
            if($type['name'] == $name)
                return $type;
        }
//        return $names;
    }
}
