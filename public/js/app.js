$(function(){
  $('#btn-alert').on('click', function(e){
    $('#alert').remove();
  });

  $('#simulation').submit(function(e){
    e.preventDefault();
    var phone_care = $('#phone_care').val();
    var from = $('#from').val();
    var to = $('#to').val();
    var duration = $('#duration').val();
    $.ajax({
      url:  "/calc",
      type: "post",
      "headers": {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      data: {
        phone_care: phone_care,
        from: from,
        to: to,
        duration: duration
      },
      success: function(data){
        if(data.status == 0){
          $("#msg").html('<div class="alert alert-danger">'+data.msg+'</div><br />');
          $("#msg").slideDown('slow');
          retirarMsg();
        } else {
          var table = document.getElementById('table');
          table.style.display = 'block';
          var with_plan = data.data.with_plan.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
          var no_plan = data.data.no_plan.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
          $('#tr').append(
            '<tr>'+
              '<td>'+data.data.from+'</td>'+
              '<td>'+data.data.to+'</td>'+
              '<td>'+data.data.time+'</td>'+
              '<td>FaleMais '+data.data.care+'</td>'+
              '<td><span class="badge badge-success">'+with_plan+'</span></td>'+
              '<td>'+no_plan+'</td>'+
            '</tr>'
          );
          //$('#res_from').append(data.data.from);
          console.log(data.data.no_plan);
        }
      }
    });
    function retirarMsg(){
      setTimeout( function (){
          $("#msg").slideUp('slow', function() {});
      }, 3000);
    }
  });
});

