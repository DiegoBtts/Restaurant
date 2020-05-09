$(".tableAppointment").dataTable();

$(".tableAppointment tbody").on("click","button#delete",function()
{
	var AppointmentId = $(this).attr("AppointmentId");
	swal.fire({
	title: '¿esta seguro de borrar la cita?',
	text: "¡si no lo esta puede cancelar!",
	type: 'warning',
	showCancelButton: true,
	confirmButtonColor: '#3085d6',
	cancelButtonColor: '#d33',
	cancelButtonText: 'Cancelar',
	confirmButtonText: 'Si, cancelar cita'

	}).then((result)=>
	{
		if (result.value)
		{
			window.location = "/appointment/"+AppointmentId+"/delete";
		}
	})
});