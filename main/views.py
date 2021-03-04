from django.shortcuts import render
from django.views.generic.base import TemplateView
from django.contrib.auth.mixins import LoginRequiredMixin
from users.models import Doctor, Patient
from .models import Appointment
from django.contrib.auth.decorators import login_required



class IndexPageView(TemplateView):
    template_name = 'index.html'

@login_required()
def HomePageView(request):
    doctors = Doctor.objects.all().count()
    patients = Patient.objects.all().count()
    appointments = Appointment.objects.all().count()

    context = {
        'doctors': doctors,
        'patients': patients,
        'appointments': appointments
    }
    return render(request, 'dashboard.html', context)
