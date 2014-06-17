$(document).ready(function() {
	$(".new-task").on('click', 'button', function(event) {
		event.preventDefault();
		
		var newTask = $(".new-task").find("input").val();
		$(".tasks").find(".empty").remove();
		
		$(".new-task").find("input").val('');

		var addedTask = $("<tr> <td><input type='checkbox'> </input></td> <td> <span class='mode1 currText'> "+newTask+" </span> <input type='text' class='form-control mode2 editText'> </td> <td> <button class='btn btn-default edit mode1'> Edit </button> <button class='btn btn-danger delete mode1'> Delete </button> <button class='btn btn-default save mode2'> Save </button> </td> </tr>");
		$(".tasks").append(addedTask);

		addedTask.find('.mode1').show();
		addedTask.find('.mode2').hide();
		
		addedTask.find(".edit").click(editTask);
		addedTask.find(".delete").click(deleteTask);
		addedTask.find(".save").click(saveTask);
	});

	function editTask () {
		var tr = $(this).closest('tr');

		$('.mode1').show();
		$('.mode2').hide();
		
		tr.find('.mode1').hide();
		tr.find('.mode2').show();	

		tr.find(".editText").val(tr.find(".currText").text().trim());
	}

	function deleteTask () {
		$(this).closest('tr').remove();

		if($(".tasks").find("tr").length == 1)
			$(".tasks").append($('<tr class="empty"><td colspan="3"><i> <center> Nothing to show </center> </i> </td></tr>'));
	}

	function saveTask () {
		var tr = $(this).closest('tr');

		tr.find('.mode2').hide();
		tr.find('.mode1').show();

		tr.find(".currText").text(tr.find(".editText").val());
	}
});