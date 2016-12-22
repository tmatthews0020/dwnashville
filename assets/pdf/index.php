
<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="./js/addtask.js"></script>
    <script src="./js/tasks.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./scss/styles.css">
  </head>
  <body>



    <script>

      $(document).ready(function(){

        $(".table").append("<table>");



        $.each(tasks, function(count, inv){


          // $.each(task,function(count, inv){
            // console.log(inv);
            var time = inv.hour+inv.time;

            $("table").append("<tr class='task_"+count+"'>");
            $(".task_"+count).append("<td class='name' value ='"+inv.name+"'>"+inv.name+"</td>");
            $(".task_"+count).append("<td  class='time'>"+time+"</td>");
            $(".task_"+count).append("<td  class='date'>"+inv.date+"</td>");
            $(".task_"+count).append("<td class='description'>"+inv.description+"</td>");
            $(".task_"+count).append("<a href='#' id='edit' val='"+inv.id+"'>edit</a></tr>");

          // });

        });
        $(".table").append("</table>");




      });

    </script>

    <div class="error"></div>


    <div class="container">


</div>


  </body>
</html>
