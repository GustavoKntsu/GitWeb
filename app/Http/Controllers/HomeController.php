<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Mocked popular products data
        $popularProducts = [
            [
                'id' => 1,
                'name' => 'Elegant Wooden Chair',
                'price' => 'R$199.99',
                'image' => 'images/products/chair1.jpg',
                'category' => 'chairs',
                'discount' => '15%',
                'rating' => 4.5,
                'type' => 'furniture'
            ],
            [
                'id' => 2,
                'name' => 'Modern Coffee Table',
                'price' => 'R$349.99',
                'image' => 'images/products/table1.jpg',
                'category' => 'tables',
                'rating' => 4.8,
                'type' => 'furniture'
            ],
            [
                'id' => 3,
                'name' => 'Minimalist Bookshelf',
                'price' => 'R$499.99',
                'image' => 'images/products/shelf1.jpg',
                'category' => 'storage',
                'discount' => '10%',
                'rating' => 4.2,
                'type' => 'furniture'
            ],
            [
                'id' => 4,
                'name' => 'Comfortable Sofa',
                'price' => 'R$1,299.99',
                'image' => 'images/products/sofa1.jpg',
                'category' => 'sofas',
                'rating' => 4.7,
                'type' => 'furniture'
            ],
            [
                'id' => 5,
                'name' => 'Bedroom Set',
                'price' => 'R$2,499.99',
                'image' => 'images/products/bedroom1.jpg',
                'category' => 'bedroom',
                'discount' => '20%',
                'rating' => 4.9,
                'type' => 'furniture'
            ],
            [
                'id' => 6,
                'name' => 'Kitchen Island',
                'price' => 'R$799.99',
                'image' => 'images/products/kitchen1.jpg',
                'category' => 'kitchen',
                'rating' => 4.6,
                'type' => 'electronics'
            ],
        ];

        // Mocked testimonials data
        $testimonials = [
            [
                'id' => 1,
                'name' => 'Mariana Silva',
                'role' => 'Interior Designer',
                'image' => 'images/testimonials/person1.jpg',
                'text' => 'Os móveis da 4Selet são incríveis! A qualidade e o design são exatamente o que eu procuro para os meus projetos. Meus clientes sempre ficam impressionados.'
            ],
            [
                'id' => 2,
                'name' => 'João Pereira',
                'role' => 'Arquiteto',
                'image' => 'images/testimonials/person2.jpg',
                'text' => 'Uso os produtos da 4Selet em quase todos os meus projetos. A combinação de estética e durabilidade é incomparável. Recomendo a todos os meus colegas.'
            ],
            [
                'id' => 3,
                'name' => 'Camila Santos',
                'role' => 'Cliente',
                'image' => 'images/testimonials/person3.jpg',
                'text' => 'Reformei minha casa inteira com móveis da 4Selet e não poderia estar mais satisfeita. O atendimento foi excelente e os móveis são de alta qualidade.'
            ],
        ];

        // Mocked blog articles data
        $articles = [
            [
                'id' => 1,
                'title' => 'Como escolher o sofá perfeito para sua sala',
                'excerpt' => 'Descubra dicas práticas para selecionar o sofá ideal que combine conforto, estilo e durabilidade.',
                'image' => 'images/blog/article1.jpg',
                'date' => '15 de Julho, 2023',
                'author' => 'Ana Martins'
            ],
            [
                'id' => 2,
                'title' => 'Tendências de design de interiores para 2023',
                'excerpt' => 'Conheça as principais tendências que estão dominando o design de interiores neste ano.',
                'image' => 'images/blog/article2.jpg',
                'date' => '3 de Agosto, 2023',
                'author' => 'Rafael Mendes'
            ],
            [
                'id' => 3,
                'title' => 'Dicas para decorar ambientes pequenos',
                'excerpt' => 'Aprenda a maximizar espaços reduzidos com escolhas inteligentes de móveis e organização.',
                'image' => 'images/blog/article3.jpg',
                'date' => '22 de Agosto, 2023',
                'author' => 'Luciana Costa'
            ],
        ];

        // Pass all data to the view
        return view('welcome', compact('popularProducts', 'testimonials', 'articles'));
    }

    /**
     * Search products based on keywords.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $category = $request->input('category', 'all');

        // Mocked products for search results
        $allProducts = [
            [
                'id' => 1,
                'name' => 'Elegant Wooden Chair',
                'price' => 'R$199.99',
                'image' => 'images/products/chair1.jpg',
                'category' => 'chairs',
                'discount' => '15%',
                'rating' => 4.5,
                'description' => 'Uma cadeira elegante feita de madeira maciça com acabamento premium.'
            ],
            [
                'id' => 2,
                'name' => 'Modern Coffee Table',
                'price' => 'R$349.99',
                'image' => 'images/products/table1.jpg',
                'category' => 'tables',
                'rating' => 4.8,
                'description' => 'Mesa de centro moderna com tampo de vidro e estrutura metálica.'
            ],
            // More products...
        ];

        // Filter products based on keyword and category
        $results = array_filter($allProducts, function($product) use ($keyword, $category) {
            $matchesKeyword = empty($keyword) ||
                              stripos($product['name'], $keyword) !== false ||
                              stripos($product['description'], $keyword) !== false;

            $matchesCategory = $category == 'all' || $product['category'] == $category;

            return $matchesKeyword && $matchesCategory;
        });

        return view('search-results', [
            'results' => array_values($results),
            'keyword' => $keyword,
            'category' => $category
        ]);
    }
}
