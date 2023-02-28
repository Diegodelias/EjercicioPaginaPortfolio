fetch('https://randomuser.me/api/')
  .then(response => response.json())
  .then(data => {
    console.log(data.results); // For debugging purposes
    // Call a function to display the results in HTML
    mostrarResultados(data.results);
  })
  .catch(error => console.error(error));


  function mostrarResultados(usuarios) {
     const nomApe = document.querySelectorAll('.nombreApellido');
     const img =document.getElementById("imagen-min");
     img.src= usuarios[0].picture.large;
   
     nomApe.forEach((n) => {
        n.textContent = `${usuarios[0].name.first} ${usuarios[0].name.last}`;

     });
     

  }



  document.addEventListener("DOMContentLoaded", mostrarResultados);