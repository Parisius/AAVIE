window.addEventListener('load', async e =>{
	if ('serviceWorker' in navigator){
		try{
			navigator.serviceWorker.register('sw.js');
			console.log('Service Worker registration succesfull');
		} catch (error){
			console.log('Service Worker registration failed', error);
		}
	}

	
});

