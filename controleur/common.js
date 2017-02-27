/* 
 *USE THIS JS FILE TO CALL AJAX FUNCTION AND RETURN DATA.
 */

//PRINCIPAL FUNCTION
function getProduct(indexTab) {
    $.ajax({
        type: "POST",
        url: 'modele/produitModele.php',
        dataType: "json",
        data: {function: "getReferences"},
        //TEST PREMIER MSG ERREUR 
        // data: {function : "getProducts"},
        success: function (response) {
            if (!isEmpty(response.error)) {
                console.error("getReferences() - " + response.error);
            }
            if (!isEmpty(response.data)) {
                var datas = response.data;
                var index = 0;
                //IF THIS IS NOT THE FIRST TIME
                if (indexTab !== undefined) {
                    index = indexTab;
                }
                $('#indexTab').text(index);
                $('#nbRef').text(datas.length);
                initialiseProductFiche(datas[index]);
                //TEST SECOND MSG ERREUR
                //initialiseProductFiche("response");
            }
        },
        error: function (erreur) {
            console.error("Erreur lors de l'appel à getProduct() " + erreur[0]);
        }
    });
}


//SEARCH REFERENCES FUNCTION
function searchReferencesByJS(value) {
    $.ajax({
        type: "POST",
        url: 'modele/produitModele.php',
        dataType: "json",
        data: {function: "getReferencesForAutocomplete",
            data: value},
        success: function (response) {
            // Get the <datalist> and <input> elements.
            var dataList = document.getElementById('references-datalist');
            $('#references-datalist').empty();
            var input = document.getElementById('reference_recherche_JS');

            if (!isEmpty(response.error)) {
                console.error("getReferencesForAutocomplete() - " + response.error);
                input.placeholder = "Aucune occurence trouvée";
            }
            if (!isEmpty(response.data)) {
                var datas = response.data;
                console.log(datas);
                datas.forEach(function (item) {
                    // Create a new <option> element.
                    var option = document.createElement('option');
                    // Set the value using the item in the JSON array.
                    option.value = item;
                    // Add the <option> element to the <datalist>.
                    dataList.appendChild(option);
                });
            }
        },
        error: function (erreur) {
            console.error("Erreur lors de l'appel à searchReferences() " + erreur[0]);
        }
    });
}

//SEARCH REFERENCES FUNCTION
function searchReferencesByJQuery(value) {
    $.ajax({
        type: "POST",
        url: 'modele/produitModele.php',
        dataType: "json",
        data: {function: "getReferencesForAutocomplete",
            data: value},
        success: function (response) {
            if (!isEmpty(response.data)) {
                $('#reference_recherche_jQuery').autocomplete({
                    source: response.data
                });
            }
        },
        error: function (erreur) {
            console.error("Erreur lors de l'appel à searchReferences() " + erreur[0]);
        }
    });
}



function initialiseProductFiche(idProduct) {
    $.ajax({
        type: "POST",
        url: 'modele/produitModele.php',
        dataType: "json",
        data: {function: "getProduct", reference: parseInt(idProduct)},
        success: function (response) {
            if (!isEmpty(response.error)) {
                console.error("consulteProduitByReference() - " + response.error);
            }
            if (!isEmpty(response.data)) {
                afficheProductFiche(response.data);
            }
        },
        error: function (erreur) {
            console.log("Erreur lors de l'appel à initialiseProductFiche() " + erreur[0]);
        }
    });
}

//ONCLICK ON ARRAY "NEXT"
function getNextProduct() {
    //GET HIDDEN PROPERTIES
    var actualProduct = parseInt($('#indexTab').text());
    var nbRef = parseInt($('#nbRef').text());


    //THIS IS THE PRODUCT EXPECTED...
    var expectedProduct = actualProduct + 1;
    //BUT IF THE ACTUAL PRODUCT IS THE LAST OF THE ARRAY, THE EXPECTED PRODUCT IS THE FIRST OF THE ARRAY "REFERENCES"
    if (actualProduct === nbRef - 1) {
        expectedProduct = 0;
    }
    getProduct(expectedProduct);
}

//ONCLICK ON ARRAY "PREVIOUS"
function getPreviousProduct() {
    var actualProduct = parseInt($('#indexTab').text());
    var nbRef = parseInt($('#nbRef').text());

    //THIS IS THE PRODUCT EXPECTED
    var expectedProduct = actualProduct - 1;
    //BUT IF THE ACTUAL PRODUCT IS THE FIRST, THE EXPECTED PRODUCT IS THE LAST OF THE ARRAY "REFERENECES"
    if (actualProduct === 0) {
        expectedProduct = nbRef - 1;
    }
    getProduct(expectedProduct);
}

//DISPLAY INFORMATIONS TO HTML PAGE
function afficheProductFiche(produit) {
    if (produit !== null) {
        Object.keys(produit).forEach(function (attribut) {
            var text = produit[attribut];
            $("#" + attribut).text(text);
        });
    }
}

//TEST IF RETURN IS EMPTY OR NOT
function isEmpty(str) {
    return (!str || 0 === str.length);
}

//CALL METHOD FOR THE FIRST TIME
getProduct();