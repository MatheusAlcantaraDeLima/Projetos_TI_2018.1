import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { Routes, RouterModule } from '@angular/router';

import { IonicModule } from '@ionic/angular';

import { MedicamentosPage } from './medicamentos.page';
import { MedicamentosmPage } from '../medicamentosm/medicamentosm.page';

const routes: Routes = [
  {
    path: '',
    component: MedicamentosPage
  }
];

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    ReactiveFormsModule,
    RouterModule.forChild(routes)
  ],
  declarations: [MedicamentosPage, MedicamentosmPage],
  entryComponents: [MedicamentosmPage]
})
export class MedicamentosPageModule {}
