from django.urls import path
from .import views
from django.contrib.auth import views as auth_views
from .views import *


urlpatterns = [
	path('update_patient/<int:pk>/', UpdatePatient.as_view(), name='update_patient'),
	path('delete_patient/<int:pk>/', DeletePatient.as_view(), name='delete_patient'),
	path('manage_patient/', ManagePatient.as_view(), name='manage_patients'),
	path('update_doctor/<int:pk>/', UpdateDoctor.as_view(), name='update_doctor'),
	path('delete_doctor/<int:pk>/', DeleteDoctor.as_view(), name='delete_doctor'),
	path('manage_doctors/', ManageDoctors.as_view(), name='manage_doctors'),
	path('doctors_list/', DoctorsListView.as_view(), name='doctors_list'),
	path('patients_list/',PatientsListView.as_view(), name='patients_list'),
	path('profile/', views.profile, name='profile'),
	path('doctorProfile', views.DoctorProfile, name='doctor_profile'),
	path('patientProfile', views.PatientProfile, name='patient_profile'),
	path('doctor/', DoctorView.as_view(), name='doctor'),
	path('patient/', PatientView.as_view(), name='patient'),
	path('appointment/', AppointmentView.as_view(), name='appointment'),
	path('discharge_patient/', DischargeView.as_view(), name='discharge_patient'),
	path('signup/', views.register, name='signup'),
    path('login/', auth_views.LoginView.as_view(template_name='registration/login.html'), name='login'),
    path('logout/', auth_views.LogoutView.as_view(template_name='registration/logout.html'), name='logout'),
    path('password-change', auth_views.PasswordChangeView.as_view(template_name='users/password_change_form.html'), name='password_change'),
    path('password-change-done', auth_views.PasswordChangeDoneView.as_view(template_name='users/password_change_done.html'), name='password_change_done'),
    path('password-reset/', auth_views.PasswordResetView.as_view(template_name='users/password_reset.html'), name='password_reset'),
    path('password-reset/done/', auth_views.PasswordResetDoneView.as_view(template_name='users/password_reset_done.html'), name='password_reset_done'),
    path('password-reset-confirm/<uidb64>/<token>/', auth_views.PasswordResetConfirmView.as_view(template_name='users/password_reset_confirm.html'), name='password_reset_confirm'),
    path('password-reset-complete/', auth_views.PasswordResetCompleteView.as_view(template_name='users/password_reset_complete.html'), name='password_reset_complete'),

]
