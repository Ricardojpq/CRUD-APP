<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Collection;

/**
 * Servicio para gestión de productos.
 *
 * Este servicio abstrae la lógica de acceso a datos para los productos.
 */
class ProductService
{
        // Datos estáticos para GET (10 productos de ejemplo)

      private  $staticProducts ;

      public function __construct(){
        $this->staticProducts = new Collection([
            ['id'=>1,'name'=>'Producto 1','description'=>'Descripción del producto 1','price'=>10.50,'stock'=>20],
            ['id'=>2,'name'=>'Producto 2','description'=>'Descripción del producto 2','price'=>5.75,'stock'=>15],
            ['id'=>3,'name'=>'Producto 3','description'=>'Descripción del producto 3','price'=>12.00,'stock'=>30],
            ['id'=>4,'name'=>'Producto 4','description'=>'Descripción del producto 4','price'=>7.99,'stock'=>25],
            ['id'=>5,'name'=>'Producto 5','description'=>'Descripción del producto 5','price'=>20.00,'stock'=>10],
            ['id'=>6,'name'=>'Producto 6','description'=>'Descripción del producto 6','price'=>3.50,'stock'=>40],
            ['id'=>7,'name'=>'Producto 7','description'=>'Descripción del producto 7','price'=>15.30,'stock'=>5],
            ['id'=>8,'name'=>'Producto 8','description'=>'Descripción del producto 8','price'=>9.99,'stock'=>50],
            ['id'=>9,'name'=>'Producto 9','description'=>'Descripción del producto 9','price'=>22.10,'stock'=>8],
            ['id'=>10,'name'=>'Producto 10','description'=>'Descripción del producto 10','price'=>30.00,'stock'=>12],
        ]);
      }
      
    /**
     * Listar productos.
     *
     * Actualmente retorna una lista estática de 10 productos.
     * Para producción, descomentar la consulta a la base de datos.
     *
     * @return Collection
     */
    public function listProducts(): Collection
    {


        return $this->staticProducts;

        // Para uso con base de datos, descomentar:
        // return Product::all();
    }

    /**
     * Obtener producto por id
     *
     * @param int $id
     * @return Product|null
     */
    public function getProductById(int $id): ?Product
    {
        $product = $this->staticProducts->firstWhere('id', $id);
        return $product ? new Product($product) : null;
    }

    /**
     * Crear un producto nuevo
     *
     * @param array $data
     * @return Product
     */
    public function createProduct(array $data): ?Product
    {
        // return Product::create($data);
        return null;
    }

    /**
     * Actualizar un producto existente
     *
     * @param int $id
     * @param array $data
     * @return Product|null
     */
    public function updateProduct(int $id, array $data): ?Product
    {
        // $product = Product::find($id);
        // if ($product) {
        //     $product->update($data);
        // }
        // return $product;
          return null;
    }

    /**
     * Eliminar un producto
     *
     * @param int $id
     * @return bool
     */
    public function deleteProduct(int $id): bool
    {
        // $product = Product::find($id);
        // if ($product) {
        //     return $product->delete();
        // }
        // return false;
          return false;
    }
}