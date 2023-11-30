<div class="right-sitebar container content-admin">
  <h2 class="py-4 title-admin">Danh sách danh mục</h2>
  <button class="btn" id="back">< Quay lại</button>
  <div class="listdanhmuc d-flex justify-content-center align-items-center p2-5">
        <form id="form-add-cat">
            <div class="input-group mb-3">
                <input type="hidden" value="0" id="idparent">
                <input type="text" class="form-control" id="cat-name" placeholder="Nhập tên danh mục" aria-label="Recipient's username" aria-describedby="btn_update-cate">
                <button type="button" class="btn btn-outline-secondary button-add-cat" type="submit" name="btn_add-cat" id="btn_add-cate">Thêm danh mục</button>
            </div>
        </form>
    </div>
  <div id="echoTableCat"></div>
  <div id="log"></div>
</div>
<script>
  $(document).ready(function(){
    function all_data(id = false){
      $.ajax({
        url : './ajax/ajaxCat.php',
        type : 'POST',
        data : {
          insertTable : true,
          idparent : id
        },
        success: function(data){
          $('#echoTableCat').html(data);
        }
      });
    }
    function update_data(id,text,column){
      $.ajax({
        url : './ajax/ajaxCat.php',
        type : 'POST',
        data : {
          updateColumn : true,
          id : id,
          text : text,
          column : column
        },
        success: function(log){
          $("#log").html(log);
          all_data();
        }
      });
    }
    function delete_data(id){
      $.ajax({
        url : './ajax/ajaxCat.php',
        type : 'POST',
        data : {
          deleteColumn : true,
          id : id,
        },
        success: function(log){
          $("#log").html(log);
          all_data($('#idparent').val());
        }
      });
    }
    function add_data(id,text){
      $.ajax({
        url : './ajax/ajaxCat.php',
        type : 'POST',
        data : {
          addColumn : true,
          id : id,
          text : text
        },
        success: function(log){
          $("#log").html(log);
          $("#form-add-cat")[0].reset();
          all_data($('#idparent').val());
        }
      });
    }
    $(document).on('click',"#back",function(){
      id = $('#idparent').val();
      $.ajax({
        url : './ajax/ajaxCat.php',
        type : 'POST',
        data : {
          back : true,
          id : id,
        },
        success: function(log){
          if(id == 0){
            $("#log").html(log);
          }else{
            all_data(log);
            $('#idparent').val(log);
          }
        }
      });
    });
    $(document).on('blur',".catname",function(){
      id = $(this).data('id');
      text = $(this).text();
      update_data(id,text,'cat_name');
    });
    $(document).on('click',".catchild",function(){
      id = $(this).data('id');
      $('#idparent').val(id);
      all_data(id);
    });
    $(document).on('click',".button-add-cat",function(){
      id = $('#idparent').val();
      text = $('#cat-name').val();
      add_data(id,text);
    });
    $(document).on('click',".btn-del-cart",function(){
      id = $(this).data('id');
      delete_data(id);
    });
    all_data();
  });
</script>