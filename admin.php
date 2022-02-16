<?php include "templates/headerAdmin.php"; ?>

<?php include "templates/bodyRecetas.php"; ?>


<script>
    panes = document.getElementsByClassName("contenedor");


    for (let index = 0; index < panes.length; index++) {
        //  panes[index].innerHTML=myboton;
        const element = panes[index];

        element.addEventListener("click", closePane);
    }

    function closePane(event) {

        if (event.target.tagName == 'BUTTON') {
            event.currentTarget.remove();
        }
    }
</script>

<?php include "templates/footer.php"; ?>
</body>

</html>