<script src="/jquery-3.3.1.min.js"></script>

    
<?php 
include_once '/script1.php';
$categories = getCategoriesList();?>

<body  style="text-align: center">
<h2>Assignment</h2>
<form>
 <label>Call centr: <select id="select1">
         <option disabled selected value>Select Centr
         </option>
                       <?php foreach ($categories as $categoryItem): ?>
         <option value = <?php echo $categoryItem['id'];?>>
                            <?php echo $categoryItem['name'];?> 
         </option> 
                         <?php endforeach;?>
         
                    </select>
 <label/><br />
<label>Desk:        <select id="select2">
                         <option disabled selected value>Select Desk
                        </option>
                        
                    </select>
 <label/><br />
 
<label>Team:        <select id="select3">
        <option disabled selected value>Select Team
         </option>
                                               
                    </select>
 <label/><br />
<label>Sales:       <select id="select4">
        <option disabled selected value>Select Sales
         </option>
                        
                        
                    </select>
 <label/><br />

</form>
<body/>

<script>
    
    $(document).ready(function(){
        $("#select1").change(function(){
            var id = $("#select1 option:selected").attr("value");
            $.post('/script2.php', {id}, function(data){
            data = JSON.parse(data);

            for (var key in data){
                $("#select2").append($('<option>', { value : data[key].id, text:(data[key].name) }));
            }
          });
            return false;
        });
        $("#select2").change(function(){
            var id = $("#select2 option:selected").attr("value");
            $.post('/script3.php', {id}, function(data){
            data = JSON.parse(data);
        for (var key in data){
            $("#select3").append($('<option>', { value : data[key].id, text:(data[key].name) }));
        }
          });
            return false;
        });
    $("#select3").change(function(){
            var id = $("#select3 option:selected").attr("value");
            $.post('/script4.php', {id}, function(data){
           data = JSON.parse(data);
        for (var key in data){
            $("#select4").append($('<option>', { value : data[key].id, text:(data[key].name) }));
        }
          });
            return false;
        });
    
    });
</script>
 