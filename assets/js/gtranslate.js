// Checks if document is loaded
const performWhenDocumentIsLoaded = callback => {
    if (/comp|inter|loaded/.test(document.readyState))
        callback();
    else
        document.addEventListener('DOMContentLoaded', callback, false);
}

performWhenDocumentIsLoaded(() => {

    const element = document.getElementsByTagName('html')[0];

    const observer = new MutationObserver((mutations) => {
        mutations.forEach(function(mutation) {
            
            if ( mutation.type === "attributes" && mutation.attributeName === "lang" )
                console.log(mutation.target.lang)
        });
    });

    observer.observe(element, {
        attributes: true
    });

});