window.onload = function () {
            // Variables
            let baseDeDatos = [
                {
                    id: 1,
                    nombre: 'BOTA DE MONTAR TIERRA BENDITA 1004',
                    precio: 645,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/7/977468-1_9.jpg'
                },
                {
                    id: 2,
                    nombre: 'BOTA DE VESTIR SAO PAULO 9CC3',
                    precio: 699,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/8/7/878795-1_6.jpg'
                },
                {
                    id: 3,
                    nombre: 'BOTA HIKER GOODYEAR 1W15',
                    precio: 869,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/1/5/158901-1_1_2.jpg'
                },
                {
                    id: 4,
                    nombre: 'SANDALIA OCASIONES ESPECIALES MOLTO BELLO 793',
                    precio: 285,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/1/7/176881-1_4.jpg'
                },
                {
                    id: 5,
                    nombre: 'SANDALIA DE VESTIR YAELI FASHION 0905',
                    precio: 272,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/8/2/820267-1_11.jpg'
                },
                {
                    id: 6,
                    nombre: 'ZAPATILLA DE VESTIR EFE 1506',
                    precio: 519,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/1/7/176691-1_11.jpg'
                },
                {
                    id: 7,
                    nombre: 'SANDALIA DE PLAYA RIO BRAND 8015',
                    precio: 119,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/8/2/820433-1_4.jpg'
                },
                {
                    id: 8,
                    nombre: 'SANDALIA DE PLAYA BANANA PRICE CJ26',
                    precio: 129,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/1/8/185121-1_5.jpg'
                },
                {
                    id: 9,
                    nombre: 'KIT DE BALLERINA CASUAL PINK BY PRICE SHOES 3171',
                    precio: 519,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/8/7/872257-1_10.jpg'
                },
                {
                    id: 10,
                    nombre: 'BALERINA CASUAL PINK BY PRICE SHOES 1497',
                    precio: 369,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/8/2/829384-01.jpg'
                },
                {
                    id: 11,
                    nombre: 'KIT DE BALERINA CONFORT MIRAGE 801',
                    precio: 315,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/8/2/825751-2.jpg'
                },
                {
                    id: 12,
                    nombre: 'ZAPATO CASUAL VI LINE 4204',
                    precio: 385,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/4/941567-1_9.jpg'
                },
                {
                    id: 13,
                    nombre: 'ZAPATO CASUAL SHOSH 8021',
                    precio: 385,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/8/7/878018-1_5.jpg'
                },
                {
                    id: 14,
                    nombre: 'TENIS CASUAL ADIDAS MAVIA X 2527',
                    precio: 1599,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/6/960703-1.jpg'
                },
                {
                    id: 15,
                    nombre: 'TENIS CASUAL REEBOK EVZN 8677',
                    precio: 1599,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/8/986731-1.jpg'
                },
                {
                id: 16,
                nombre: 'TENIS CASUAL PUMA ROMA 7121',
                precio: 1699,
                imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/7/978245-1_9.jpg'
                },
                {
                id: 17,
                nombre: 'TENIS CASUAL NIKE REPOSTO 0200',
                precio: 1799,
                imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/8/986677-1_9.jpg'
                },
                {
                id: 18,
                nombre: 'TENIS CASUAL ADIDAS LITE RACER SLIPON X380',
                precio: 1099,
                imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/8/986943-1_9.jpg'
                },
                {
                id: 19,
                nombre: 'TENIS CASUAL TOMMY HILFIGER RYZER 4SN7',
                precio: 2399,
                imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/8/987008-1_7.jpg'
                },
                {
                id: 20,
                nombre: 'TENIS CASUAL PUMA ANZARUN FS 3006',
                precio: 1599,
                imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/8/987117-1_9.jpg'
                },
                {
                    id: 21,
                    nombre: 'BOTA HEAVY GOODYEAR 9303',
                    precio: 779,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/2/926247-1_5.jpg'
                },
                {
                    id: 22,
                    nombre: 'BOTA HEAVY GOODYEAR 8521',
                    precio: 779,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/2/926261-1_9.jpg'
                },
                {
                    id: 23,
                    nombre: 'BOTA HIKER PROKENNEX 625X',
                    precio: 849,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/2/926291-1_5.jpg'
                },
                {
                    id: 24,
                    nombre: 'BOTA INDUSTRIAL GOODYEAR 0111',
                    precio: 1169,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/8/2/826476-01.jpg'
                },
                {
                    id: 25,
                    nombre: 'CHOCLO CASUAL MIRAGE 4026',
                    precio: 409,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/5/953459-1_5.jpg'
                },
                {
                    id: 26,
                    nombre: 'CHOCLO CASUAL QUIRELLI 0202',
                    precio: 1249,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/1/8/186037-2_10.jpg'
                },
                {
                    id: 27,
                    nombre: 'CHOCLO DE VESTIR MIRAGE 3210',
                    precio: 349,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/5/951888-1_9.jpg'
                },
                {
                    id: 28,
                    nombre: 'TENIS CASUAL PUMA CARACAL STYLE 1604',
                    precio: 1499,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/8/9/894018-1_10.jpg'
                },
                {
                    id: 29,
                    nombre: 'TENIS CASUAL LOTTO BURN 9601',
                    precio: 1049,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/0/901731-1_5.jpg'
                },
                {
                    id: 30,
                    nombre: 'TENIS CASUAL K-SWISS 0010',
                    precio: 1399,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/0/909605-1_6.jpg'
                },
                {
                    id: 31,
                    nombre: 'TENIS CASUAL NIKE AIR MAX AXIS 6101',
                    precio: 1899,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/8/9/892768-1_10.jpg'
                },
                {
                    id: 32,
                    nombre: 'CHOCLO CASUAL PERRY ELLIS 6554',
                    precio: 899,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/2/929074-1_9.jpg'
                },
                {
                    id: 33,
                    nombre: 'CHOCLO CASUAL MIRAGE 1018',
                    precio: 369,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/8/2/826257-1_9.jpg'
                },
                {
                    id: 34,
                    nombre: 'CHOCLO CASUAL FLEXI 8615',
                    precio: 999,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/1/8/185868-1_10.jpg'
                },
                {
                    id: 35,
                    nombre: 'CHOCLO CASUAL KAFE 3017',
                    precio: 409,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/4/948266-1_9.jpg'
                },
                {
                    id: 36,
                    nombre: 'TENIS CASUAL PIRMA BRASIL 7005',
                    Numcal: 'ID-948808',
                    dis: 'DISPONIBLE',
                    precio: 545,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/small_image/330x330/beff4985b56e3afdbeabfc89641a4582/9/4/948808-1_8.jpg'
                },
                {
                    id: 37,
                    nombre: 'TENIS CASUAL URBAN SHOES 2020',
                    precio: 545,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/8/2/825496-1.jpg'
                },
                {
                    id: 38,
                    nombre: 'TENIS CASUAL HPC POLO 0207',
                    precio: 459,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/1/3/134532-1-1_1.jpg'
                },
                {
                    id: 39,
                    nombre: 'ZAPATO CASUAL CHABELO 52AA',
                    precio: 679,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/5/958828-1_9.jpg'
                },
                {
                    id: 40,
                    nombre: 'ZAPATO CASUAL VI LINE FASHION 705',
                    precio: 335,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/5/955955-1_5.jpg'
                },
                {
                    id: 41,
                    nombre: 'KIT DE CHOCLO CASUAL VIVIS SHOES KIDS 2378',
                    precio: 599,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/1/5/156939-1_10.jpg'
                },
                {
                    id: 42,
                    nombre: 'KIT BALLERINA CASUAL VIVIS SHOES KIDS 7244',
                    precio: 449,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/1/7/178721-1_11.jpg'
                },
                {
                    id: 43,
                    nombre: 'SANDALIA CASUAL TROPICANA N 1739',
                    precio: 319,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/8/2/820475-1.jpg'
                },
                {
                    id: 44,
                    nombre: 'TENIS CASUAL ADIDAS FORTAFAITO EL K 7295',
                    precio: 1099,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/8/986953-1_5.jpg'
                },
                {
                    id: 45,
                    nombre: 'TENIS DEPORTIVOS PARA CORRER UNDER ARMOUR UA GPS SURGE RN AC 3001',
                    precio: 1039,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/8/3/831205-1_12.jpg'
                },
                {
                    id: 46,
                    nombre: 'ZAPATO CASUAL KAFE 1510',
                    precio: 335,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/small_image/330x330/beff4985b56e3afdbeabfc89641a4582/9/7/970306-1_4.jpg'
                },
                {
                    id: 47,
                    nombre: 'KIT DE ZAPATO DE VESTIR MIRAGE 3020',
                    precio: 529,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/small_image/330x330/beff4985b56e3afdbeabfc89641a4582/9/5/958824-01.jpg'
                },
                {
                    id: 48,
                    nombre: 'ZAPATO CASUAL HUSH PUPPIES 1571',
                    precio: 559,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/1/4/144897-1.jpg'
                },
                {
                    id: 49,
                    nombre: 'TENIS DEPORTIVO PARA BASKETBALL PIRMA BRASIL 2008',
                    precio: 549,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/4/948813-6.jpg'
                },
                {
                    id: 50,
                    nombre: 'TENIS CASUALES K-SWISS 81',
                    precio: 449,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/8/3/831407-1.jpg'
                },
                {
                    id: 51,
                    nombre: 'TENIS CASUAL HPC POLO 0207',
                    precio: 459,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/small_image/330x330/beff4985b56e3afdbeabfc89641a4582/1/2/123909-1_1.jpg'
                },
                {
                    id: 52,
                    nombre: 'ZAPATO CASUAL HUSH PUPPIES1 0842',
                    precio: 709,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/1/8/180754-2_13.jpg'
                },
                {
                    id: 53,
                    nombre: 'BOTA HIKER KEBO KIDS 0304',
                    precio: 385,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/1/5/158237-2_1.jpg'
                },
                {
                    id: 54,
                    nombre: 'TENIS DEPORTIVO PARA CORRER ADIDAS FORTARUN EL K 2580',
                    precio: 1199,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/9/8/986980-1_5.jpg'
                },
                {
                    id: 55,
                    nombre: 'TENIS DEPORTIVO PARA CORRER PUMA WIRED KNIT PS 8208',
                    precio: 1199,
                    imagen: 'https://smhttp-ssl-50034.nexcesscdn.net/pub/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/8/3/834025-1_11.jpg'
                },



            ];

            let $items = document.querySelector('#items');
            let carrito = [];
            let total = 0;
            let $carrito = document.querySelector('#carrito');
            let $total = document.querySelector('#total');
            let $botonVaciar = document.querySelector('#boton-vaciar');

            // Funciones
            function renderItems() {
                for (let info of baseDeDatos) {
                    // Estructura
                    let miNodo = document.createElement('div');
                    miNodo.classList.add('card', 'col-sm-4');
                    // Body
                    let miNodoCardBody = document.createElement('div');
                    miNodoCardBody.classList.add('card-body');
                    // Titulo
                    let miNodoTitle = document.createElement('h5');
                    miNodoTitle.classList.add('card-title');
                    miNodoTitle.textContent = info['nombre'];
                    // Imagen
                    let miNodoImagen = document.createElement('img');
                    miNodoImagen.classList.add('img-fluid');
                    miNodoImagen.setAttribute('src', info['imagen']);
                    // Precio
                    let miNodoPrecio = document.createElement('p');
                    miNodoPrecio.classList.add('card-text');
                    miNodoPrecio.textContent = '$' + info['precio'] + 'MXN';
                    // Boton
                    let miNodoBoton = document.createElement('button');
                    miNodoBoton.classList.add('btn', 'btn-primary');
                    miNodoBoton.textContent = '+';
                    miNodoBoton.setAttribute('marcador', info['id']);
                    miNodoBoton.addEventListener('click', anyadirCarrito);
                    // Insertamos
                    miNodoCardBody.appendChild(miNodoImagen);
                    miNodoCardBody.appendChild(miNodoTitle);
                    miNodoCardBody.appendChild(miNodoPrecio);
                    miNodoCardBody.appendChild(miNodoBoton);
                    miNodo.appendChild(miNodoCardBody);
                    $items.appendChild(miNodo);
                }
            }

            function anyadirCarrito () {
                // Anyadimos el Nodo a nuestro carrito
                carrito.push(this.getAttribute('marcador'))
                // Calculo el total
                calcularTotal();
                // Renderizamos el carrito
                renderizarCarrito();
            }

            function renderizarCarrito() {
                // Vaciamos todo el html
                $carrito.textContent = '';
                // Quitamos los duplicados
                let carritoSinDuplicados = [...new Set(carrito)];
                // Generamos los Nodos a partir de carrito
                carritoSinDuplicados.forEach(function (item, indice) {
                    // Obtenemos el item que necesitamos de la variable base de datos
                    let miItem = baseDeDatos.filter(function(itemBaseDatos) {
                        return itemBaseDatos['id'] == item;
                    });
                    // Cuenta el número de veces que se repite el producto
                    let numeroUnidadesItem = carrito.reduce(function (total, itemId) {
                        return itemId === item ? total += 1 : total;
                    }, 0);
                    // Creamos el nodo del item del carrito
                    let miNodo = document.createElement('li');
                    miNodo.classList.add('list-group-item', 'text-right', 'mx-2');
                    miNodo.textContent = `${numeroUnidadesItem} x ${miItem[0]['nombre']} - ${miItem[0]['precio']}MXN`;
                    // Boton de borrar
                    let miBoton = document.createElement('button');
                    miBoton.classList.add('btn', 'btn-danger', 'mx-5');
                    miBoton.textContent = 'X';
                    miBoton.style.marginLeft = '1rem';
                    miBoton.setAttribute('item', item);
                    miBoton.addEventListener('click', borrarItemCarrito);
                    // Mezclamos nodos
                    miNodo.appendChild(miBoton);
                    $carrito.appendChild(miNodo);
                });
            }

            function borrarItemCarrito() {
                // Obtenemos el producto ID que hay en el boton pulsado
                let id = this.getAttribute('item');
                // Borramos todos los productos
                carrito = carrito.filter(function (carritoId) {
                    return carritoId !== id;
                });
                // volvemos a renderizar
                renderizarCarrito();
                // Calculamos de nuevo el precio
                calcularTotal();
            }

            function calcularTotal() {
                // Limpiamos precio anterior
                total = 0;
                // Recorremos el array del carrito
                for (let item of carrito) {
                    // De cada elemento obtenemos su precio
                    let miItem = baseDeDatos.filter(function(itemBaseDatos) {
                        return itemBaseDatos['id'] == item;
                    });
                    total = total + miItem[0]['precio'];
                }
                // Formateamos el total para que solo tenga dos decimales
                let totalDosDecimales = total.toFixed(2);
                // Renderizamos el precio en el HTML
                $total.textContent = totalDosDecimales;
            }

            function vaciarCarrito() {
                // Limpiamos los productos guardados
                carrito = [];
                // Renderizamos los cambios
                renderizarCarrito();
                calcularTotal();
            }

            // Eventos
            $botonVaciar.addEventListener('click', vaciarCarrito);

            // Inicio
            renderItems();
        }