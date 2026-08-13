---
title: Inhaltsverzeichnis
visible: true
process:
    markdown: true
    twig: true
content:
    items: '@self.siblings'
    pagination: true           
---

# Inhaltsverzeichnis

{% for p in page.collection.visible %}
<a href="{{p.link}}"><h5>{{ p.title }}</h5></a>
{% endfor %}
