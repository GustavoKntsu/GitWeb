<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mocked products data
        $products = $this->getMockedProducts();
        
        return view('products.index', compact('products'));
    }

    /**
     * Display the specified product.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find the product by ID from mocked data
        $products = $this->getMockedProducts();
        $product = null;
        
        foreach ($products as $p) {
            if ($p['id'] == $id) {
                $product = $p;
                break;
            }
        }
        
        if (!$product) {
            abort(404, 'Product not found');
        }
        
        // Related products (mocked)
        $relatedProducts = array_filter($products, function($p) use ($product, $id) {
            return $p['category'] === $product['category'] && $p['id'] != $id;
        });
        
        return view('products.show', compact('product', 'relatedProducts'));
    }

    /**
     * Get mocked products data.
     *
     * @return array
     */
    private function getMockedProducts()
    {
        return [
            [
                'id' => 1,
                'name' => 'Elegant Wooden Chair',
                'price' => 'R$199.99',
                'image' => 'images/products/chair1.jpg',
                'category' => 'chairs',
                'discount' => '15%',
                'rating' => 4.5,
                'description' => 'Uma cadeira elegante feita de madeira maciça com acabamento premium.',
                'specifications' => [
                    'Material' => 'Madeira maciça',
                    'Dimensões' => '60cm x 55cm x 90cm',
                    'Peso' => '8kg',
                    'Cor' => 'Carvalho natural'
                ],
                'type' => 'furniture'
            ],
            [
                'id' => 2,
                'name' => 'Modern Coffee Table',
                'price' => 'R$349.99',
                'image' => 'images/products/table1.jpg',
                'category' => 'tables',
                'rating' => 4.8,
                'description' => 'Mesa de centro moderna com tampo de vidro e estrutura metálica.',
                'specifications' => [
                    'Material' => 'Vidro e metal',
                    'Dimensões' => '100cm x 60cm x 45cm',
                    'Peso' => '15kg',
                    'Cor' => 'Preto/Transparente'
                ],
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
                'description' => 'Estante minimalista com cinco prateleiras, perfeita para livros e decoração.',
                'specifications' => [
                    'Material' => 'MDF com acabamento premium',
                    'Dimensões' => '80cm x 30cm x 180cm',
                    'Peso' => '25kg',
                    'Cor' => 'Branco'
                ],
                'type' => 'furniture'
            ],
            [
                'id' => 4,
                'name' => 'Comfortable Sofa',
                'price' => 'R$1,299.99',
                'image' => 'images/products/sofa1.jpg',
                'category' => 'sofas',
                'rating' => 4.7,
                'description' => 'Sofá confortável de três lugares com estofado premium.',
                'specifications' => [
                    'Material' => 'Estrutura de madeira com estofado em tecido',
                    'Dimensões' => '220cm x 90cm x 85cm',
                    'Peso' => '60kg',
                    'Cor' => 'Cinza'
                ],
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
                'description' => 'Conjunto completo para quarto incluindo cama, criados-mudos e cômoda.',
                'specifications' => [
                    'Material' => 'Madeira maciça',
                    'Itens' => 'Cama queen, 2 criados-mudos, cômoda',
                    'Peso' => '120kg',
                    'Cor' => 'Marrom escuro'
                ],
                'type' => 'furniture'
            ],
            [
                'id' => 6,
                'name' => 'Kitchen Island',
                'price' => 'R$799.99',
                'image' => 'images/products/kitchen1.jpg',
                'category' => 'kitchen',
                'rating' => 4.6,
                'description' => 'Ilha de cozinha com espaço de armazenamento e balcão em mármore.',
                'specifications' => [
                    'Material' => 'Madeira e mármore',
                    'Dimensões' => '120cm x 60cm x 90cm',
                    'Peso' => '45kg',
                    'Cor' => 'Branco/Mármore'
                ],
                'type' => 'electronics'
            ],
        ];
    }
}