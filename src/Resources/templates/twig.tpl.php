{# <?= $componentHandle ?> #}
{% block <?= $componentHandle ?> %}
    {% apply spaceless }
<?= $html ?>
    {% endapply %}
{% endblock %}
