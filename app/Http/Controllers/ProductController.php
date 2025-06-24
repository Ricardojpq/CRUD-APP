<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

/**
 * Controlador para manejo del CRUD de productos.
 */
class ProductController extends Controller
{
    private ProductService $productService;

    /**
     * Constructor inyecta el servicio ProductService
     *
     * @param ProductService $productService
     */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Listar todos los productos (sólo GET estático)
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $products = $this->productService->listProducts();
        return response()->json($products, 200);
    }

    /**
     * Obtener producto por id
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $product = $this->productService->getProductById($id);
        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }
        return response()->json($product, 200);
    }

    /**
     * Crear nuevo producto
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $this->validateData($request);

        $product = $this->productService->createProduct($validated);

        return response()->json($product, 201);
    }

    /**
     * Actualizar producto
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $validated = $this->validateData($request);

        $product = $this->productService->updateProduct($id, $validated);

        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        return response()->json($product, 200);
    }

    /**
     * Eliminar producto
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $deleted = $this->productService->deleteProduct($id);

        if (!$deleted) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }
        return response()->json(['message' => 'Producto eliminado con éxito'], 200);
    }

    /**
     * Validar datos de entrada para creación y actualización
     *
     * @param Request $request
     * @return array
     *
     * @throws ValidationException
     */
    private function validateData(Request $request): array
    {
        return $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);
    }
}