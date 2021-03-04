from django.urls import path
from . import views
from users.views import AppointmentsListView
from .views import IndexPageView


urlpatterns = [
    path('', IndexPageView.as_view(), name="index"),
    path('home/', views.HomePageView, name="main-home"),
    path('appointments_list/', AppointmentsListView.as_view(), name='appointments_list'),
]
