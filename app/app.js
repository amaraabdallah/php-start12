const $main = document.querySelector('main');
const $form = document.querySelector('form');
const $username = document.querySelector('input[name="username"]');
const $password = document.querySelector('input[name="password"]');
$form.addEventListener('submit', (evt) => {
  evt.preventDefault();
  // Récupérer les valeurs du formulaire
  const data = {
    username: $username.value,
    password: $password.value
  };

  // Envoi de la requete de connexion au serveur
  fetch('http://localhost/php-start12/api/login.php', {
      method: "POST",
      body: JSON.stringify(data)
    })
    .then(res => res.json())
    .then(data => {
        // Lecture de la réponse
        if (data && data.success) {
          fetch('http://localhost/php-start12/api/posts.php') 
            .then(res => res.json())
            .then(dataPost => updateView(dataPost));
        }else{
          alert("va t'habiller");
          $username.value = ""
          $password.value = ""
        }
    })
          function updateView(dataPost) {
            $main.innerHTML = `
                  <p id= "user">Salut mon Ami ${data.username}</p>
                  <p id= "posts">Tiens, Amuses Toi</p>
   
            <ul>
            ${
              dataPost.map(post =>`
                  <li>
                     <h3 class ="title">${post.title}</h3> 
                     <h3 class ="body">${post.body }</h3>
                </li> `)  

             .join('')
            }
            
             </ul>
 
    `;
          }
        })

