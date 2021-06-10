const fetchVnById = async id => {
  const apiUrl = `${config.api_url}/vn/${id}`;
  const res = await fetch(apiUrl);
  const resData = await res.json();
  return resData.data;
};

const getFavArray = favString => {
  let result = favString.replace(/\s+/g, '');
  result = result.split("-");
  result.forEach(element => {
    if (element.length < 3 || element.includes(" ") || element == "" || element.includes("\n")) {
      const index = result.indexOf(element);
      if (index > -1) {
        result.splice(index, 1);
      }
    }
  });
  return result;
} 

const templateFav = id => {
  return new Promise( async (resolve, reject) => {
    try {
      const vnData = await fetchVnById(id);
      let template = 
      `<li class="col-6 col-sm-3 card bg-dark text-white">
      <a href="details.php?id=${id}">
        <img src="${vnData.image}" class="card-img" alt="">
        <div class="card-img-overlay">
          <h5 class="card-title">${vnData.title}</h5>
        </div>
      </a>
      </li>`;
      resolve(template);
    } catch (error) {
      reject(error);
    };
  });
};

const loadFavorite = async favArray => {
  if (favArray.length == 0) {
    document.getElementById('search-content').innerHTML += '<h2>You have no favorite vn</h2>';
  }
  const promises = [];
  favArray.map(id => {
    promises.push(templateFav(id));
  });
  Promise.all(promises)
    .then(response => {
      response.forEach(template => {
        document.getElementById('search-content').innerHTML += template;
      });
      console.log('templates loaded');
    });
};

console.log(getFavArray(document.getElementById('fav-str').innerHTML));
loadFavorite(getFavArray(document.getElementById('fav-str').innerHTML));