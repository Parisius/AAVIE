const staticAssets = [
'./',
'images/b2.jpg',
'images/banner2.jpg',
'images/banner_mid.jpg',
'images/be.jpg',
'images/bottom.jpg',
'images/corp.jpg',
'images/g1.jpg',
'images/g2.jpg',
'images/g3.jpg',
'images/g4.jpg',
'images/g5.jpg',
'images/g6.jpg',
'images/g7.jpg',
'images/g8.jpg',
'images/know.jpg',
'images/pic.jpg',
'images/t1.jpg',
'images/t2.jpg',
'images/t3.jpg',
'images/t4.jpg',
'images/banner1.jpeg',
'images/banner2.jpeg',
'images/banner3.jpeg',
'images/banner4.jpeg',
'images/ab.png',
'images/logoaavie.png',
'images/logoaavieblack.png',
'images/top_move.png',
'images/ca.PNG',
'images/favicon.ico',
'images/banques/a.jpg',
'images/banques/b.jpg',
'images/banques/c.jpg',
'images/banques/d.jpg',
'images/banques/e.jpg',
'images/banques/f.jpg',
'images/banques/g.jpg',
'images/banques/h.jpg',
'images/banques/i.jpg',
'images/banques/k.jpg',
'images/banques/l.jpg',
'images/banques/m.jpg',
'images/banques/n.jpg',
'images/reass/a.jpg',
'images/reass/b.jpg',
'images/reass/c.jpg',
'images/reass/d.jpg',
'images/reass/e.jpg',
'images/reass/f.jpg',
'images/reass/g.jpg',
'images/banques/j.png',
'images/icons/android-chrome-192x192.png',
'images/icons/android-chrome-512x512.png',
'images/icons/apple-touch-icon.png',
'images/reass/h.png',
'404.php',
'abouten.php',
'aboutorg.php',
'blog.php',
'contact.php',
'espace.php',
'footer.php',
'getImage.php',
'head.php',
'index.php',
'prodbanc.php',
'prodind.php',
'prodmicro.php',
'product.php',
'single.php',
'test.php',
'app.js',
'sw.js',
'manifest.json',
'portfolio.html',
'signin.html',
'signup.html',
'css/bootstrap.css',
'css/contact.css',
'css/font-awesome.css',
'css/owl.carousel.css',
'css/owl.theme.css',
'css/prettyPhoto.css',
'css/single.css',
'css/style.css',
'css/team.css',
'css/test.css',
'js/bootstrap.js',
'js/easing.js',
'js/jquery-1.7.2.js',
'js/jquery-2.2.3.min.js',
'js/jquery.prettyPhoto.js',
'js/jquery.quicksand.js',
'js/script.js',
'fonts/FontAwesome.otf',
'fonts/fontawesome-webfont.eot',
'fonts/fontawesome-webfont.svg',
'fonts/fontawesome-webfont.woff',
'fonts/glyphicons-halflings-regular.woff',
'fonts/fontawesome-webfont.woff2',
'fonts/glyphicons-halflings-regular.woff2',
'json/articles.json',
'json/products.json',
]


self.addEventListener('install', async e => {
    const cache = await caches.open('aavie-static')
    cache.addAll(staticAssets);
   });

self.addEventListener('fetch', event => {
    const req = event.request;
    const url = new URL(req.url);

    if (url.origin === location.origin){
        event.respondWith(cacheFirst(req));
    }else {
        event.respondWith(networkFirst(req));
    }
    
});

async function cacheFirst(req)
{
    const cachedResponse = caches.match(req);
    return cachedResponse || fetch (req);
}

async function networkFirst(req)
{
    const cache = await caches.open('aavie-dynamic');
    try {
        const res = await fetch(req);
        cache.put(req, res.clone());
        return res;
    }catch (error){
        const cachedResponse = await cache.match(req);
        return cachedResponse || await caches.match('fallback.json');
    }
}
