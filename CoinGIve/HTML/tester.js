function onload(){
  

	fetch('https://block.io/api/v2/get_balance/?api_key=0bc3-7069-8b66-c95f&address=bc1qjl8uwezzlech723lpnyuza0h2cdkvxvh54v3dn')
    .then(res => res.json())
    .then((out) => {
        console.log('Output: ', out);
}).catch(err => console.error(err));
    
    fetch('https://block.io/api/v2/get_transactions/?api_key=0bc3-7069-8b66-c95f&type=received&addresses=bc1qjl8uwezzlech723lpnyuza0h2cdkvxvh54v3dn')
    .then(res => res.json())
    .then((out) => {
        console.log('Output: ', out);
}).catch(err => console.error(err));
    
    
   
}

