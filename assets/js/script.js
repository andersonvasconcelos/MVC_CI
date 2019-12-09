$('.btnAddC').click(function(e){
	e.preventDefault();
	var nome = $('[name=nome]').val();
	
	$.ajax(
		{
			type:'post',
			url:'categorias/index',
			data:{nome: nome},
			dataType:'json',
		success:function(r)
		{
			console.log(r);
			if(r.log == true){
				alert(r.msg);
				var newRow = $("<tr>");
				var cols = "";                                  
				 	cols += '<td>'+r.cat['id']+'</td>';
					cols += '<td>'+r.cat['nome']+'</td>';

					cols += '<td>';
					cols += '<a href="categorias/edit/'+r.cat['id']+' "class="btn btn-sm btn-info">Editar</a> ';
					cols += '<a href="categorias/del/'+r.cat['id']+' "class="btn btn-sm btn-danger">Deletar</a>';
					cols += '</td>';


					newRow.append(cols);

				$("#table").append(newRow);
				$('[name=nome]').val('');
				$('#add').modal('hide');


			}else{
				alert('Categoria Não cadastrada');
			}
		}
	});
});

$('.delCat').click(function(e){
	e.preventDefault();
	let id = $(this).data('id');
	$.ajax({
		url:'delete',
		type:'post',
		data:{id:id},
		success:function(r){
			console.log(r);
			alert('Categoria Deletada com Sucesso');
			window.location.reload();
		}
	});

});
