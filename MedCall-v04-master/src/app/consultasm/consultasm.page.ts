import { Component, OnInit } from '@angular/core';
import { ModalController } from '@ionic/angular';

@Component({
  selector: 'app-consultasm',
  templateUrl: './consultasm.page.html',
  styleUrls: ['./consultasm.page.scss'],
})
export class ConsultasmPage implements OnInit {

  constructor(
    private modalCtrl: ModalController
  ) { }

  ngOnInit() {
  }

    fechar() {
      this.modalCtrl.dismiss();
    }

  }