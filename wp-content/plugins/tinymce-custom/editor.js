jQuery(function() {
    tinymce.PluginManager.add("mce_editor_js", function(editor){
        // adding custom buttons to tinymce editor

        function toggleClassOnSelectedContainer(className) {
            var node = editor.selection.getNode(); // Obtiene el nodo actual seleccionado

            // Si el nodo es un elemento que puede contener texto, intentamos alternar la clase
            if (node.nodeType === 1) { // 1 es ELEMENT_NODE
                // Alternar la clase en el nodo
                if (node.classList.contains(className)) {
                    node.classList.remove(className);
                    if(node.classList.length === 0) { // Si ya no tiene clases, eliminar el atributo
                        node.removeAttribute('class');
                    }
                } else {
                    node.classList.add(className);
                }
                // Refrescar el contenido para aplicar cambios visuales
                editor.undoManager.transact(function() {
                    editor.setContent(editor.getContent());
                });
            }
        }

        editor.addButton("editor_dropdown", {
            text: "Formatos",
            type: "menubutton",
            menu: [
                {
                    text: "Button Primary Contanier",
                    value: "btn-primary",
                    onclick: function() {
                        toggleClassOnSelectedContainer(this.value());
                    }
                },
                {
                    text: "Button Secondary Contanier",
                    value: "btn-secondary",
                    onclick: function() {
                        toggleClassOnSelectedContainer(this.value());
                    }
                },
                {
                    text: "Button Rounded Contanier",
                    value: "btn-rounded",
                    onclick: function() {
                        toggleClassOnSelectedContainer(this.value());
                    }
                },
                {
                    text: "Button Link Contanier",
                    value: "btn-link",
                    onclick: function() {
                        toggleClassOnSelectedContainer(this.value());
                    }
                },
            ]
        });
    });
});