<?php

namespace App\Http\Controllers;

class MyController extends Controller
{
    public function index()
    {
        $infoItems = [
            ['icon' => 'assets/img/digital-comics.png', 'text' => 'DIGITAL COMICS', 'alt' => 'Digital Comics'],
            ['icon' => 'assets/img/merchandiseIcon.png', 'text' => 'DC MERCHANDISE', 'alt' => 'DC Merchandise'],
            ['icon' => 'assets/img/subscriptionIcon.png', 'text' => 'SUBSCRIPTION', 'alt' => 'Subscription'],
            ['icon' => 'assets/img/comic-shop-locator.png', 'text' => 'COMIC SHOP LOCATOR', 'alt' => 'Comic Shop Locator'],
            ['icon' => 'assets/img/dc-power-visa.svg', 'text' => 'DC POWER VISA', 'alt' => 'DC Power Visa'],
        ];

        $footerSections = [
            [
                'title' => 'DC COMICS',
                'items' => ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News']
            ],
            [
                'title' => 'DC',
                'items' => ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us']
            ],
            [
                'title' => 'SITES',
                'items' => ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa']
            ],
            [
                'title' => 'SHOP',
                'items' => ['Shop DC', 'Shop DC Collectibles']
            ]
        ];

        return view('home', compact('infoItems', 'footerSections'));
    }
}
