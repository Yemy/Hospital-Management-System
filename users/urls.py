from django.urls import path
from .import views
from django.contrib.auth import views as auth_views
from .views import DoctorView, PatientView, AppointmentView, DischargeView


urlpatterns = [
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
