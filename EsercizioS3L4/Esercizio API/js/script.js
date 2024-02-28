const urlAPI = 'http://localhost/Back-End/EsercizioS3L4/wordpress/wp-json/wp/v2/';

if (location.pathname === '/utenti.html') {
  // Chiamata GET users
  fetch(urlAPI + 'users')
    .then(response => response.json())
    .then(data => getUsers(data))

} else if (location.pathname === '/post.html') {
  // Chiamata GET posts
  fetch(urlAPI + 'posts')
    .then(response => response.json())
    .then(data => createPosts(data))

} else {
  // Chiamata GET homepage
  fetch(urlAPI)
    .then(response => response.json())
    .then(data => console.log(data))

}

function getUsers(users) {
  console.log(users);
  users.forEach(user => {
    let usersContainer = document.querySelector('#usersTableBody');
    usersContainer.innerHTML += `
        <tr class="align-middle">
          <th scope="row">${user.id}</th>
          <td><img src="${user.avatar_urls['48']}" alt="propic" class="propic"></td>
          <td>${user.name}</td>
          <td>${user.slug}</td>
        </tr>
        `
  })
}

function createPosts(posts) {
  posts.forEach(post => {
    let cardContainer = document.querySelector('#postCards');
    cardContainer.innerHTML += `
        <div class="card mb-3 mx-1" style="width: 15rem;" >
         <div class="card-body d-flex flex-column justify-content-between">
         <div>
           <h5 class="card-title text-center">${post.title.rendered}</h5>
           <p class="card-text">${post.content.rendered}</p>
           </div>
           <div class="d-flex justify-content-center">
           <p></p>
           <a href="utenti.html" class="btn btn-outline-primary mx-2">Scopri di più</a>
           </div>
          </div>
        </div>
        `
  })
}











