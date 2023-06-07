
<?php include('video.php') ?>
<body>
<header>
<?php
    include_once("header.php");
?>
</header>

<div id="api">
<h2>Died today</h2>
<p id="diedPerson"></p>
</div>

<script>

    const date = new Date();
    let day = date.getUTCDate();
    let month = date.getMonth() + 1 ;
    let year = date.getFullYear();

    if (month < 10) {
    month = "0" + month;
    }
    if (day < 10) {
    day = "0" + day;
     }

    let currentDate =  
    console.log(day, month, year)


    const apiUrl = `https://deces.matchid.io/deces/api/v1/search?deathDate=${day}%2F${month}%2F${year}`

async function getAPI(){
    try {
        let rep = await fetch(apiUrl);
        let reponse = await rep.json();
        // console.log(reponse);
        let personsArray = reponse.response.persons;
        // console.log(personsArray)

        personsArray.forEach(person => {
            // console.log(person.name.first[0], person.name.last)
            displayNames(person.name.first[0], person.name.last);
        });


    } catch (error){
        console.log(error);

    }
}

getAPI();


function displayNames(firstName, lastName) {
    console.log(firstName, lastName)
    document.getElementById('diedPerson').innerHTML += firstName + " " + lastName + "<br>" + '~ ~ ~' + "<br>"
}

</script>


<footer>

</footer>
</body>
</html>