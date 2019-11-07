import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { DependentesPage } from './dependentes.page';

describe('DependentesPage', () => {
  let component: DependentesPage;
  let fixture: ComponentFixture<DependentesPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DependentesPage ],
      schemas: [CUSTOM_ELEMENTS_SCHEMA],
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DependentesPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
