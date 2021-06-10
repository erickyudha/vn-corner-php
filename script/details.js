const tagOriginal = [
  '[SPOILER]',
  '[/SPOILER]',
  '[URL=',
  '[url=',
  '/]',
  '[/url]',
  '[/URL]'
];
const tagNew = [
  '<spoiler>',
  '</spoiler>',
  '<a id="synopsis-link" target="_blank"href="',
  '<a id="synopsis-link" target="_blank"href="',
  '">',
  '</a>',
  '</a>',
];

const getQueryString = () => {
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  return urlParams.get('id');
};

const fetchVnById = async id => {
  const apiUrl = `${config.api_url}/vn/${id}`;
  const res = await fetch(apiUrl);
  const resData = await res.json();
  return resData.data;
};

const loadVnData = async id => {
  const vnData = await fetchVnById(id);
  let synopsis = vnData.description;
  tagOriginal.forEach((key, index) => {
    synopsis = synopsis.replaceAll(key, tagNew[index]);
  });

  document.getElementById('tab-title').innerHTML = `${vnData.title} - VN Corner`
  document.getElementById('details-img').src = vnData.image;
  document.getElementById('title').innerHTML = vnData.title;
  document.getElementById('ori-title').innerHTML = vnData.original;
  document.getElementById('aliases').innerHTML = vnData.aliases;
  document.getElementById('released').innerHTML = vnData.released;
  document.getElementById('length').innerHTML = vnData.length;
  document.getElementById('synopsis').innerHTML = synopsis;
};

loadVnData(getQueryString());

const loadFavBtn = (x) => {
  if (x == 0) {
    document.getElementById('fav-btn').innerHTML = `<button class="btn btn-outline-danger" name="favorite" value="favorite" type="submit">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
    </svg>
    Favorite
    </button>`
  } else {
    document.getElementById('fav-btn').innerHTML = `<button class="btn btn-danger" name="unfavorite" value="unfavorite" type="submit">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
    </svg>
    Unfavorite
    </button>`;
  }
}