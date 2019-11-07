import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { Routes, RouterModule } from '@angular/router';

import { IonicModule } from '@ionic/angular';

import { DependentesPage } from './dependentes.page';
import { DependentesmPage } from '../dependentesm/dependentesm.page';

const routes: Routes = [
  {
    path: '',
    component: DependentesPage
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
  declarations: [DependentesPage, DependentesmPage],
  entryComponents: [DependentesmPage]
})
export class DependentesPageModule {}
