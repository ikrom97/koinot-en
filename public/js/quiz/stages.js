import { RussianTest } from './russian-test.js';
import { EnglishTest } from './english-test.js';
import { FinanceTest } from './finance-test.js';

export const Stages = [
  {
    title: 'Russian language',
    questions: RussianTest,
  },
  {
    title: 'English',
    questions: EnglishTest,
  },
  {
    title: 'Financial block',
    questions: FinanceTest,
  },
];
