function AddGenre() {
            //Build an array containing Customer records.
            var genre = [
                { GenreId: 1, Name: "Genre 1", },
                { GenreId: 2, Name: "Genre 2", },
                { GenreId: 3, Name: "Genre 3", },
                { GenreId: 4, Name: "Genre 4", }
            ];
            //Create a DropDownList element.
            var ddlGenre = $("<select />");
 
            //Add the Options to the DropDownList.
            $(genre).each(function () {
               var option = $("<option />");
 
                //Set Customer Name in Text part.
                option.html(this.Name);
 
                //Set CustomerId in Value part.
                option.val(this.GenreId);
 
                //Add the Option element to DropDownList.
                ddlGenre.append(option);
            });
 
            //Reference the container DIV.
            var dvContainer = $("#dvContainer")
 
            //Add the DropDownList to DIV.
            var div = $("<div />");
            div.append(ddlGenre);
 
            //Create a Remove Button.
            var btnRemove = $("<button class='btn'><i class='fa fa-minus'></i></button>");
            btnRemove.click(function () {
                $(this).parent().remove();
            });
 
            //Add the Remove Buttton to DIV.
            div.append(btnRemove);
 
            //Add the DIV to the container DIV.
            dvContainer.append(div);
        };