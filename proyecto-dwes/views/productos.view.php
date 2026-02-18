<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Productos</title>
    <link rel="stylesheet" href="public/style.css"> 
</head>
<body>
    <nav>
        <a href="index.php?url=home">Inicio</a>
        <a href="index.php?url=productos">Productos</a>
    </nav>

    <h1>Listado de Productos</h1>

    <?php if (empty($listado)): ?>
        <p>No hay productos disponibles en la db</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listado as $producto): ?>
                    <tr>
                        <td><?= htmlspecialchars($producto['id']) ?></td>
                        <td><?= htmlspecialchars($producto['nombre']) ?></td>
                        <td><?= htmlspecialchars($producto['descripcion'] ?? 'Sin descripción') ?></td>
                        <td class="precio"><?= number_format($producto['precio'], 2, ',', '.') ?>€</td>
                        <td><?= $producto['stock'] ?> unidades</td>
                        <td>
                            <a href="index.php?action=editar&id=<?= $producto['id'] ?>">Editar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>