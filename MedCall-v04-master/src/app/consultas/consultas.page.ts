import { Component, OnInit } from '@angular/core';
import { ModalController } from '@ionic/angular';
import { ConsultasmPage } from '../consultasm/consultasm.page';

@Component({
  selector: 'app-consultas',
  templateUrl: './consultas.page.html',
  styleUrls: ['./consultas.page.scss'],
})
export class ConsultasPage implements OnInit {

  constructor(
    private modalCtrl: ModalController
  ) {}

  async openConsultasm() {
    const modal = await this.modalCtrl.create({
      component: ConsultasmPage
    });
    modal.present();
  }
  ngOnInit() {
  }

}
