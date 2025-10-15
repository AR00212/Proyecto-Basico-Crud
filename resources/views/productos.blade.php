<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        table { width: 60%; margin: auto; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: center; }
        dialog { border: none; border-radius: 10px; padding: 20px; }
        form { display: flex; flex-direction: column; gap: 10px; }
        button { padding: 8px 12px; }
</style>
<body>
  <h1>Crud de productos</h1>
  <table>
    <thead>
    <div style="text-align: center; margin-bottom: 20px;">
        <button onclick="document.getElementById('createModal').showModal()">➕ Agregar Producto</button>
    </div>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Imagen</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
        <tr>
        <td>{{$producto->id}}</td>
        <td>{{$producto->nombre}}</td>
        <td>{{$producto->precio}}</td>
        <td>{{$producto->imagen}}</td>
        <td>
        <button onclick="openEditModal({{ $producto->id }}, '{{ $producto->nombre }}', '{{ $producto->precio }}','{{ $producto->imagen }}')">✏️</button>
                        <form method="POST" action="{{ route('productos.destroy', $producto) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Estás seguro?')">🗑️</button>
                        </form>
        </td>
</tr>
@endforeach
    </tbody>
  </table>
  <dialog id="createModal">
        <form method="POST" action="{{ route('productos.store') }}">
            @csrf
            <h3>Agregar Producto</h3>
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="number" name="precio" placeholder="Precio" required>
            <input type="text" name="imagen" placeholder="imagen" required>
            <div style="display: flex; justify-content: space-between;">
                <button type="submit">Guardar</button>
                <button type="button" onclick="document.getElementById('createModal').close()">Cancelar</button>
            </div>
        </form>
    </dialog>

    <dialog id="editModal">
        <form method="POST" id="editForm">
            @csrf
            @method('PUT')
            <h3>Editar Producto</h3>
            <input type="text" name="nombre" id="editNombre" required>
            <input type="number" name="precio" id="editPrecio" step="0.01" required>
            <input type="text" name="imagen" id="editImagen"placeholder="imagen" required>
            <div style="display: flex; justify-content: space-between;">
                <button type="submit">Actualizar</button>
                <button type="button" onclick="document.getElementById('editModal').close()">Cancelar</button>
            </div>
        </form>
    </dialog>
    <script>
    function openEditModal(id, nombre, precio, imagen) {
            document.getElementById('editNombre').value = nombre;
            document.getElementById('editPrecio').value = precio;
            document.getElementById('editImagen').value = imagen;

            const form = document.getElementById('editForm');
            form.action = '/productos/' + id;

            document.getElementById('editModal').showModal();
        }
    </script>
</body>
</html>