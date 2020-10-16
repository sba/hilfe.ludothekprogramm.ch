---
title: 'Allgemeine Einstellungen'
taxonomy:
    category:
        - docs
child_type: docs
process:
    markdown: true
    twig: true
content:
    items: '@self.children'
    pagination: true   
---

# Allgemeine Programmeinstellungen
{% for p in page.collection %}
<a href="{{p.url}}"><h5>{{ p.title }}</h5></a>
{% endfor %}
