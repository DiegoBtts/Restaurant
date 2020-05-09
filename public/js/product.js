$(".tableProduct").dataTable();

$(".tableProduct tbody").on("click","button#delete",function()
{
	var ProductId = $(this).attr("ProductId");
	swal.fire({
	title: '¿esta seguro de borrar el producto?',
	text: "¡si no lo esta puede cancelar!",
	type: 'warning',
	showCancelButton: true,
	confirmButtonColor: '#3085d6',
	cancelButtonColor: '#d33',
	cancelButtonText: 'Cancelar',
	confirmButtonText: 'Si, Eliminar producto'

	}).then((result)=>
	{
		if (result.value)
		{
			window.location = "/product/"+ProductId+"/delete";
		}
	})
});