from django.shortcuts import render
from django.views.generic.base import TemplateView


class IndexPageView(TemplateView):
    template_name = 'index.html'


class HomePageView(TemplateView):
    template_name = 'home.html'
