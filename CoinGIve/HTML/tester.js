function onload(){
  

	fetch('https://blockchain.info/rawaddr/1PqEA6DQRmEHFsBDSDW7j6gvQvh8w8B5Ly')
    .then(res => res.json())
    .then((out) => {
        console.log('Output: ', out);
}).catch(err => console.error(err));
}
    