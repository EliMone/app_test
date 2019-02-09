
<!DOCTYPE html>
<html lang="en">
<head>
  
   
</head>
<body>
    

<script type="text/javascript">
       
       
        const client_id = "0805466082cde7109541";
        const client_secret = "3ea462e3e127bb0bda551c4d8106b9f7c0947419";
        const fetchUsers = async () => {
            const api_call = await fetch('https://api.github.com/users/em1404?client_id=${client_id}&client_secret=${client_secret}');
        
            const data = await api_call.json();
            return {data}
        };

        const showData = () => {
            fetchUsers().then((res) => {
                console.log(res)

                document.getElementById("user").innerHTML = res.data.login;
               
            })
        };
        
        showData();

        

    </script>

    <p id="user"></p>

     
</body>
</html>
