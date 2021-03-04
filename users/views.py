from django.shortcuts import render, redirect
from .forms import UserRegisterForm , UserUpdateForm, ProfileUpdateForm, DoctorProfileUpdateForm, PatientProfileUpdateForm
from django.contrib import messages
from django.views.generic.base import TemplateView
from django.contrib.auth.decorators import login_required
from django.views.generic import ListView, UpdateView, DetailView, DeleteView
from django.contrib.auth.mixins import LoginRequiredMixin
from .models import Doctor, Patient
from main.models import Appointment
from django.urls import reverse_lazy


class ManageDoctors(LoginRequiredMixin, ListView):
    model = Doctor
    template_name = 'manage_doctors.html'
    context_object_name = 'doctors'


class UpdateDoctor(LoginRequiredMixin, UpdateView):
    model = Doctor
    success_url = reverse_lazy('manage_doctors')
    template_name = 'update_doctor.html'
    fields = '__all__'


class DeleteDoctor(LoginRequiredMixin, DeleteView):
    model = Doctor
    success_url = reverse_lazy('manage_doctors')
    template_name = 'doctor_confirm_delete.html'


class ManagePatient(LoginRequiredMixin, ListView):
    model = Patient
    template_name = 'manage_patients.html'
    context_object_name = 'patients'


class UpdatePatient(LoginRequiredMixin, UpdateView):
    model = Patient
    success_url = reverse_lazy('manage_patients')
    template_name = 'update_patient.html'
    fields = '__all__'


class DeletePatient(LoginRequiredMixin, DeleteView):
    model = Patient
    success_url = reverse_lazy('manage_patients')
    template_name = 'patient_confirm_delete.html'


class DoctorsListView(LoginRequiredMixin, ListView):
    model = Doctor
    template_name = 'doctors_list.html'
    context_object_name = 'doctors'


class PatientsListView(LoginRequiredMixin, ListView):
    model = Patient
    template_name = 'patients_list.html'
    context_object_name = 'patients'

class AppointmentsListView(LoginRequiredMixin, ListView):
    model = Appointment
    template_name = 'appointments_list.html'
    context_object_name = 'appointments'


def register(request):
    if request.method == 'POST':
        form = UserRegisterForm(request.POST)
        if form.is_valid():
            form.save()
            username = form.cleaned_data.get('username')
            messages.success(request, f'Your Account Has Been created for {username}!')
            return redirect('login')
    else:
        form = UserRegisterForm()

    return render(request, 'users/signup.html', {'form': form})

@login_required
def profile(request):
    if request.method == 'POST':
        u_form = UserUpdateForm(request.POST, instance=request.user)
        p_form = ProfileUpdateForm(request.POST, request.FILES, instance=request.user.admin)
        if u_form.is_valid() and p_form.is_valid():
            u_form.save()
            p_form.save()
            messages.success(request, f'Your Account Has Been Updated!')
            return redirect('profile')
    else:
        u_form = UserUpdateForm(instance=request.user)
        p_form = ProfileUpdateForm(instance=request.user.admin)

    context = {
    'u_form': u_form,
    'p_form': p_form
    }
    return render(request, 'users/profile.html', context)

@login_required
def DoctorProfile(request):
    if request.method == 'POST':
        u_form = UserUpdateForm(request.POST, instance=request.user)
        p_form = DoctorProfileUpdateForm(request.POST, request.FILES, instance=request.user.doctor)
        if u_form.is_valid() and p_form.is_valid():
            u_form.save()
            p_form.save()
            messages.success(request, f'Your Account Has Been Updated!')
            return redirect('doctor_profile')
    else:
        u_form = UserUpdateForm(instance=request.user)
        p_form = DoctorProfileUpdateForm(instance=request.user.doctor)

    context = {
    'u_form': u_form,
    'p_form': p_form
    }
    return render(request, 'users/profile.html', context)

@login_required
def PatientProfile(request):
    if request.method == 'POST':
        u_form = UserUpdateForm(request.POST, instance=request.user)
        p_form = PatientProfileUpdateForm(request.POST, request.FILES, instance=request.user.patient)
        if u_form.is_valid() and p_form.is_valid():
            u_form.save()
            p_form.save()
            messages.success(request, f'Your Account Has Been Updated!')
            return redirect('patient_profile')
    else:
        u_form = UserUpdateForm(instance=request.user)
        p_form = PatientProfileUpdateForm(instance=request.user.patient)

    context = {
    'u_form': u_form,
    'p_form': p_form
    }
    return render(request, 'users/profile.html', context)



class DoctorView(TemplateView):
    template_name = 'doctor.html'


class PatientView(TemplateView):
    template_name = 'patient.html'


class AppointmentView(TemplateView):
    template_name = 'appointment.html'


class DischargeView(TemplateView):
    template_name = 'discharge_patient.html'
