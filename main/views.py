from django.shortcuts import render
from django.views.generic.base import TemplateView
from django.contrib.auth.mixins import LoginRequiredMixin


class IndexPageView(TemplateView):
    template_name = 'index.html'


class HomePageView(LoginRequiredMixin, TemplateView):
    template_name = 'dashboard.html'
