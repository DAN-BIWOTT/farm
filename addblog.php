
       
  <div id="id01" class="modal">


  	<div class="modal-content animated slideInDown">
  		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal" style="margin-top: 3%;">&times;</span>

  			<img id="moha" src="#" style="position: absolute; width: 30%; top: 15%; left: 7%;">
  		

  		<form style="margin-left: 45%; margin-top: 2%;" method="POST" action="addblogdb.php" enctype="multipart/form-data"> 

   				      <label>Add a pic</label><br>
              <input type="file" onchange="readURL(this);" name="mybooks" ><br>

   			 	   	<input class="form-control form-control" type="text" name="name" placeholder="Name your dish" style="width: 100%; border-radius: 10px;">


             
            <textarea style="margin-top: 1%; padding: 3% 5%; width: 100%; border-radius: 10px; height: 20%;" placeholder="Give a brief summary" name="summary"></textarea>

   			 		


     			    <textarea style="margin-top: 1%; padding: 5% 5%; width: 100%; border-radius: 10px; height: 50%;" placeholder="Write your blog here" name="blog"></textarea>

              

     		     

      				<input type="submit" style="margin-top: 3%;" class="btn btn-primary py-3 px-5" >	
 
 			 </form>


  			
  		</div>		
  	</div>

    <script type="text/javascript">
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#moha').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
