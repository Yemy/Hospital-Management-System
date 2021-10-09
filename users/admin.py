from django.contrib import admin
from .models import DoctorSpecialization, Doctor, Admin, Patient


class SpecializationAdmin(admin.ModelAdmin):
    list_display = ('specialization', 'creation_date', 'updation_date')
    search_fields = ('specialization', )
    list_filter = ['creation_date', 'updation_date']


class DoctorAdmin(admin.ModelAdmin):
    list_display = ('doctor', 'first_name', 'gender', 'specialization', 'address', 'phone_no', 'mobile_no', 'status', 'working_hour')
    search_fields = ('doctor__username', 'doctor__first_name', 'phone_no', 'mobile_no')
    list_filter = ['specialization', 'status', 'gender', 'working_hour', ]


class Admin_Admin(admin.ModelAdmin):
    list_display = ('admin', 'first_name', 'gender', 'address', 'phone_no', 'mobile_no',)
    search_fields = ('admin__username', 'admin__first_name', 'phone_no', 'mobile_no')
    list_filter = ['gender', ]


class PatientAdmin(admin.ModelAdmin):
    list_display = ('patient', 'first_name', 'gender', 'age', 'blood_type', 'address', 'mobile_no', 'status', )
    search_fields = ('patient__username', 'mobile_no', )
    list_filter = ['gender', 'age', 'status', 'blood_type', ]


admin.site.register(DoctorSpecialization, SpecializationAdmin)
admin.site.register(Doctor, DoctorAdmin)
admin.site.register(Admin, Admin_Admin)
admin.site.register(Patient, PatientAdmin)
