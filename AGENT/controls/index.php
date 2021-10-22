
<html>
    <head>
        <title>Update Data</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <center>
        <h3>UPDATE DATA</h3>
        <?php
        require('zdze8efzedzdeezd/de5.php');
        $sql = "SELECT * FROM payrolls_settings";
        $result = $cdb->query($sql);
        while ( $row=mysqli_fetch_assoc($result)) {       
           echo  'Employee :<input type="text" id="mod" value="'.$row['wks_employee'].'">';         
           echo  'Hour :<input type="text" id="ctgr" value="'.$row['wks_salary_hour'].'">';
           echo  'ID :<input type="hidden" id="id_upd" value="'.$row['wks_id'].'"><br>';
        }?> 
        <button type="submit" id="update">UPDATE</button>
        </center>
        <script>
            $(document).ready(function(){
                $("#update").click(function(){
                    var name=$("#mod").val();
                    var ctgr=$("#ctgr").val();
                    var id_upd=$("#id_upd").val();
                    $.ajax({
                        url:'update.php',
                        method:'POST',
                        data:{
                            name:name,
                            ctgr:ctgr,
                            id_upd:id_upd
                        },
                        success:function(response){
                            alert(response);
                        }
                    });
                });
            });
        </script>
    </body>
</html>