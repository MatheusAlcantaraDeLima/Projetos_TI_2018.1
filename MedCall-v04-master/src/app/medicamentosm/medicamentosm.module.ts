import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { Routes, RouterModule } from '@angular/router';

import { IonicModule } from '@ionic/angular';

import { MedicamentosmPage } from './medicamentosm.page';

const routes: Routes = [
  {
    path: '',
    component: MedicamentosmPage
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
  declarations: [MedicamentosmPage],
  exports: [MedicamentosmPage]
})
export class MedicamentosmPageModule {}
